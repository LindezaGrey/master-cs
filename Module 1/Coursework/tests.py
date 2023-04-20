import pandas as pd
import numpy as np

from main import read_input


def test_statistics_numpy() -> None:
    path = read_input("Enter the file path", default=True)

    # numpy read csv file and count the number of rows
    data = np.genfromtxt(path, delimiter=",", skip_header=1)
    number_of_rows = data.shape[0]

    # average of the second column
    average = np.mean(data[:, 1])

    # correlation between the second and third column
    correlation = np.corrcoef(data[:, 1], data[:, 2])[0, 1]

    print(f"Numpy-Result -> Correlation between the air and cpu column: {correlation} ")
    print(f"Numpy-Result -> Number of rows: {number_of_rows}")
    print(f"Numpy-Result -> Average of the second column: {average}")


def test_statistics_pandas() -> None:
    path = read_input("Enter the file path", default=True)

    # pandas read csv file and count the number of rows
    data = pd.read_csv(path)
    number_of_rows = data.shape[0]

    # average of the second column
    average = data["Air"].mean()

    # correlation between the second and third column
    correlation = data["Air"].corr(data["CPU"])

    print(
        f"Pandas-Result -> Correlation between the air and cpu column: {correlation} "
    )
    print(f"Pandas-Result -> Number of rows: {number_of_rows}")
    print(f"Pandas-Result -> Average of the second column: {average}")


if __name__ == "__main__":
    test_statistics_numpy()
    test_statistics_pandas()
