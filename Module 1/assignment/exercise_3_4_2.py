"""
A local biologist needs a program to predict population growth. The inputs
would be the initial number of organisms, the rate of growth (a real number
greater than 0), the number of hours it takes to achieve this rate, and a number
of hours during which the population grows. For example, one might start with a
population of 500 organisms, a growth rate of 2, and a growth period to achieve
this rate of 6 hours. Assuming that none of the organisms die, this would imply
that this population would double in size every 6 hours. Thus, after allowing
6 hours for growth, we would have 1000 organisms, and after 12 hours, we would
have 2000 organisms. Write a program that takes these inputs and displays a pre-
diction of the total population
"""

# import read_input from assignment.exercise_3_4_1
from assignment.exercise_3_4_1 import read_input


def calculate_population() -> dict[str, float]:
    initial_population = read_input(prompt="Enter the initial population")
    growth_rate = read_input(prompt="Enter the growth rate")
    growth_period = read_input(prompt="Enter the growth period")
    hours = read_input(prompt="Enter the number of hours")

    return {
        "initial_population": initial_population,
        "growth_rate": growth_rate,
        "growth_period": growth_period,
        "hours": hours,
        "population": initial_population * (growth_rate ** (hours / growth_period)),
    }


if __name__ == "__main__":
    result = calculate_population()
    print(
        f"Initial population: {result['initial_population']}",
        f"Growth rate: {result['growth_rate']}",
        f"Growth period: {result['growth_period']}",
        f"Hours: {result['hours']}",
        f"Population: {result['population']}",
        sep="\n",
    )
