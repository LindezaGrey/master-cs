from datetime import datetime
import logging
from csv import DictReader
from dataclasses import dataclass, field
import pathlib
from typing import Union, List


@dataclass
class TemperatureReading:
    timestamp: int
    air: float
    cpu: float
    date: datetime = field(init=False)

    def __post_init__(self) -> None:
        self.date = datetime.fromtimestamp(self.timestamp)


def read_csv_file(file_name: pathlib.Path) -> Union[List[TemperatureReading], None]:
    """
    Using DictReader from csv module
    """
    lines = []
    try:
        with open(file_name, "r", encoding="utf-8") as file:
            csv_reader = DictReader(file)
            for row in csv_reader:
                lines.append(
                    TemperatureReading(
                        timestamp=int(row["Timestamp"]),
                        air=float(row["Air"]),
                        cpu=float(row["CPU"]),
                    )
                )
            return lines
    except FileNotFoundError:
        logging.error(f"File {file_name} not found")
        return None


def read_input(
    prompt: str,
    default: bool = False,
) -> pathlib.Path:
    """
    Prompts the user for a path to a file, and returns the path as a pathlib.Path object
    If the user enters an invalid path, the function will keep prompting the user until
    a valid path is entered.
    If default is True, the function will return a default path.
    """

    if default:
        return pathlib.Path("Module 1/Coursework/tempLog-1.csv")

    while True:
        try:
            path = pathlib.Path(input(f"{prompt}: "))
            if path.exists():
                return path

            raise ValueError
        except ValueError:
            logging.error("Please enter a valid path")


def process_file() -> None:
    # file_name = read_input(prompt="Enter the file path", default=True)
    file_name = read_input(prompt="Enter the file path")

    lines = read_csv_file(file_name)
    if not lines:
        return None

    print(f"Number of data-rows: {len(lines)}")

    return None


if __name__ == "__main__":
    process_file()
