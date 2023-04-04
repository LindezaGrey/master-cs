"""
Write a script that inputs a line of plaintext and a distance value and outputs an
encrypted text using a Caesar cipher. The script should work for any printable
characters.


Write a script that inputs a line of encrypted text and a distance value and outputs
plaintext using a Caesar cipher. The script should work for any printable characters
"""

def encrypt(text: str, distance: int) -> str:
    """
    Encrypts a text using a Caesar cipher with a given distance.

    Args:
        text (str): The text to encrypt.
        distance (int): The distance to shift the characters by.

    Returns:
        str: The encrypted text.
    """
    return "".join(chr(ord(char) + distance) for char in text)


def decrypt(text: str, distance: int) -> str:
    """
    Decrypts a text using a Caesar cipher with a given distance.

    Args:
        text (str): The text to decrypt.
        distance (int): The distance to shift the characters by.

    Returns:
        str: The decrypted text.
    """
    return "".join(chr(ord(char) - distance) for char in text)


if __name__ == "__main__":
    text = input("Enter the text to encrypt: ")
    distance = int(input("Enter the distance: "))
    encrypted = encrypt(text, distance)
    print(f"Encrypted text: {encrypted}")
    print(f"Decrypted text: {decrypt(encrypted, distance)}")