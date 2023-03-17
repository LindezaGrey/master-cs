"""
Write a program that takes as input a number of kilometers and prints the corre-
sponding number of nautical miles. Use the following approximations:
• A kilometer represents 1/10,000 of the distance between the North Pole and
the equator.
• There are 90 degrees, containing 60 minutes of arc each, between the North
Pole and the equator.
• A nautical mile is 1 minute of an arc
"""


def calculate() -> float:
    conversion_ratio = (1 / 10000) * 90 * 60
    while True:
        try:
            km = float(input("Enter the number of kilometers: "))
            return km * conversion_ratio
        except ValueError:
            print("Please enter a valid number")


print(calculate())
