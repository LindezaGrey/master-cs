import matplotlib.pyplot as plt
from point import Point

y_list = [20, 93, 72, 35, 54, 95, 25, 37, 29, 72, 65, 66, 49, 43, 35, 61, 97, 66, 64, 22, 83, 69, 19, 21, 69, 40, 35, 81, 15, 41, 74, 12, 3, 65, 31, 12, 48, 68, 41, 40, 99, 13, 70, 30, 20, 35, 84, 96, 1,
          93, 61, 83, 24, 27, 93, 86, 96, 43, 10, 51, 27, 87, 40, 35, 83, 44, 15, 89, 71, 79, 25, 84, 43, 49, 66, 0, 88, 80, 4, 3, 74, 10, 41, 45, 75, 34, 41, 44, 50, 99, 41, 37, 26, 6, 94, 94, 76, 48, 32, 42]


def point_test() -> float:
    p1 = Point(1, 1)
    p2 = Point(2, 2)
    print(f" p1: {p1}")
    print(f" p2: {p2}")
    print(f"distance p1 <-> p2 { p1.distance(p2) }")
    return p1.distance(p2)


def find_neighbours(point: Point, distance: float, points: list) -> list:
    neighbours = []
    for p in points:
        if point.distance(p) <= distance:
            neighbours.append(p)
    return neighbours


def plot_xy():
    x = [x + 1 for x in range(100)]
    y = y_list
    plt.scatter(x, y)
    plt.grid(True)
    plt.savefig("plot.png")


if __name__ == "__main__":
    assert point_test() == 1.4142135623730951
    points = []
    for i in range(1, len(y_list)+1, 1):
        point = Point(i, y_list[i-1])
        points.append(point)
        # print(f"point {i}: {point}")

    neighbours = find_neighbours(points[0], 20, points)
    for n in neighbours:
        print(f"neighbour: {n}")

    plot_xy()
