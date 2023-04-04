"""
Write a program that takes as input a number of kilometers and prints the corre-
sponding number of nautical miles. Use the following approximations:
• A kilometer represents 1/10,000 of the distance between the North Pole and
the equator.
• There are 90 degrees, containing 60 minutes of arc each, between the North
Pole and the equator.
• A nautical mile is 1 minute of an arc
"""


def read_input(
    prompt: str,
) -> float:
    while True:
        try:
            return float(input(f"{prompt}: "))
        except ValueError:
            print("Please enter a valid number")


def calculate_NM() -> dict[str, float]:
    conversion_ratio = (1 / 10000) * 90 * 60
    input_in_km = read_input(prompt="Enter the number of kilometers")
    return {"input": input_in_km, "output": input_in_km * conversion_ratio}


result = calculate_NM()
print(result["input"], "kilometers is", result["output"], "nautical miles")
