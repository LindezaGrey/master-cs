def summation(lower, upper):
    result = 0
    while lower <= upper:
        result += lower
        lower += 1
    return result

print(summation(1, 10))