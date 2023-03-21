"""
Write a program that receives a series of numbers from the user and allows the
user to press the enter key to indicate that he or she is finished providing inputs.
After the user presses the enter key, the program should print the sum of the
numbers and their average.
"""


def read_input(prompt: str) -> float:
    while True:
        try:
            return float(input(f"{prompt}: "))
        except ValueError:
            print("Please enter a valid number")


def calculate_sum_and_average() -> dict[str, float]:
    numbers = []
    while True:
        try:
            numbers.append(read_input("Enter a number"))
        except KeyboardInterrupt:
            break
    return {"sum": sum(numbers), "average": sum(numbers) / len(numbers)}


print("Press Ctrl+C to stop entering numbers")
result = calculate_sum_and_average()
print("\nThe sum of the numbers is", result["sum"])
print("The average of the numbers is", result["average"])
