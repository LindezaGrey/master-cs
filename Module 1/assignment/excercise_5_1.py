"""
The Payroll Department keeps a list of employee information for each pay period
in a text file. The format of each line of the file is the following:
<last name> <hourly wage> <hours worked>
Write a program that inputs a filename from the user and prints to the terminal a
report of the wages paid to the employees for the given period. The report should
be in tabular format with the appropriate header. Each line should contain an
employees name, the hours worked, and the wages paid for that period.
"""

import pathlib


def read_input(
    prompt: str,
) -> pathlib.Path:
    while True:
        try:
            return pathlib.Path(input(f"{prompt}: "))
        except ValueError:
            print("Please enter a valid number")


file = read_input(prompt="Enter the file path")
print("Last Name | Hours Worked | Wages Paid")

with open(file, "r") as f:
    for line in f.readlines():
        values = line.split(sep=",")
        wage = float(values[1])
        hours = float(values[2])
        print(f"{values[0]} | {hours} | {wage * hours}")
