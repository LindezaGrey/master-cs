import turtle
import pprint
import matplotlib

matplotlib.use("Agg")

START_X = -320
START_Y = 320
BOARD_SIZE = 8

coords = []
for row in range(BOARD_SIZE):
    for col in range(BOARD_SIZE):
        coords.append((START_X + row * 40, START_Y - col * 40))

pprint.pprint(coords)
