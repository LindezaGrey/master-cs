def full_adder(a: bool, b: bool, c: bool) -> tuple[bool, bool]:
    # Calculate the sum of a, b, and c using XOR
    sum = a ^ b ^ c
    # Calculate the carry using AND and OR
    carry = (a & b) | (a & c) | (b & c)
    # Return the sum and carry
    return sum, carry


def half_adder(a: bool, b: bool) -> tuple[bool, bool]:
    # Calculate the sum of a and b using XOR
    sum = a ^ b
    # Calculate the carry using AND
    carry = a & b
    # Return the sum and carry
    return sum, carry


def left_shifter_python(a: int, b: int) -> int:
    """
    The calculation that is performed is:
    a * 2^b
    """

    return a << b


def right_shifter_python(a: int, b: int) -> int:
    """
    The calculation that is performed is:
    a / 2^b
    """

    return a >> b


def barrel_shifter(num: int, shift_amt: int, direction: str) -> int:
    """
    Shifts a number by a specified amount in the specified direction.

    num: the number to be shifted
    shift_amt: the amount to shift by
    direction: 'left' or 'right', specifying the direction of the shift
    """

    # Convert the number to a binary string
    bin_num = format(num, "b")

    # Add leading zeros to the binary string to make it a fixed width
    bin_num = bin_num.zfill(16)

    # Determine the shift direction and amount
    if direction == "left":
        shift = bin_num[shift_amt:] + "0" * shift_amt
    elif direction == "right":
        shift = "0" * shift_amt + bin_num[:-shift_amt]
    else:
        raise ValueError("Direction must be 'left' or 'right'.")

    # Convert the shifted binary string back to an integer
    shifted_num = int(shift, 2)

    return shifted_num


if __name__ == "__main__":
    # Tests
    print(full_adder(True, True, True))
    print(full_adder(True, True, False))

    print(left_shifter_python(660, 3))
    print(barrel_shifter(660, 3, "left"))
