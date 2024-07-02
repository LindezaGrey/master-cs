import pprint
import matplotlib.pyplot as plt
from matplotlib.patches import Rectangle

START_X = -320
START_Y = 320
BOARD_SIZE = 8

coords = []
for row in range(BOARD_SIZE):
    for col in range(BOARD_SIZE):
        coords.append((START_X + row * 40, START_Y - col * 40))


# use matplotlib to draw the chess board
def draw_chess_board(coords: list[tuple[float, float]]):
    fig, ax = plt.subplots()
    for coord in coords:
        # condition holds true for every second field in either direction
        color = "black" if (coord[0] + coord[1]) % 80 == 0 else "white"
        rect = Rectangle(coord, 40, 40, edgecolor="black", facecolor=color)
        ax.add_patch(rect)
    plt.axis("equal")
    plt.axis("off")

    plt.savefig("chess_board.png")


pprint.pprint(coords)
draw_chess_board(coords)
