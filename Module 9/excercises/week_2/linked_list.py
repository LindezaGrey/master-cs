"""
Implement a Node and a LinkedList class (type: singly-linked list).

Instantiate some Nodes, and one or more linked lists.
Use some of the methods of the linked list, in order to demonstrate
its functionality.

Set a few break points, and use the debugger, in order to show the
contents (structure) of the linked list.
"""


class Node:
    def __init__(self, data: str):
        self.data: str = data
        self.next: Node | None = None


class LinkedList:
    def __init__(self):
        self.head: Node | None = None

    def get_list(self) -> list[str]:
        linked_list = []
        current = self.head
        while current:
            linked_list.append(current.data)
            current = current.next
        return linked_list

    def append(self, data: str) -> None:
        new_node = Node(data)
        if self.head is None:
            self.head = new_node
            return
        last_node = self.head
        while last_node.next:
            last_node = last_node.next
        last_node.next = new_node

    def remove(self, data: str) -> None:
        current = self.head
        if current and current.data == data:
            self.head = current.next
            current = None
            return
        prev: Node | None = None
        while current and current.data != data:
            prev = current
            current = current.next
        if current is None:
            return
        if prev:
            prev.next = current.next
        current = None

    def count(self) -> int:
        count = 0
        current = self.head
        while current:
            count += 1
            current = current.next
        return count

    def search(self, searchkey: str) -> Node | None:
        current = self.head
        while current:
            if current.data == searchkey:
                return current
            current = current.next
        return None


# example: undo - functionality
node_data = ["Action 1", "Action 2", "Action 3", "Action 4", "Action 5"]

linked_list = LinkedList()

for data in node_data:
    linked_list.append(data)
print(linked_list.get_list())

linked_list.remove("Action 6")

print(linked_list.get_list())
