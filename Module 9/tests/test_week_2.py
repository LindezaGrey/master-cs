"""
Implement and run automated unit tests for the following methods:
append, remove, search, count, get_list (returning the entire linked list)
"""

from unittest import TestCase
from excercises.week_2.linked_list import LinkedList


class TestSinglyLinkedList(TestCase):
    def test_append(self):
        linked_list = LinkedList()
        linked_list.append("Action 1")
        linked_list.append("Action 2")
        linked_list.append("Action 3")
        linked_list.append("Action 4")
        linked_list.append("Action 5")
        self.assertEqual(linked_list.count(), 5)

    def test_remove(self):
        linked_list = LinkedList()
        linked_list.append("Action 1")
        linked_list.append("Action 2")
        linked_list.append("Action 3")
        linked_list.append("Action 4")
        linked_list.append("Action 5")

        linked_list.remove("Action 3")

        self.assertEqual(linked_list.count(), 4)

    def test_get_list(self):
        linked_list = LinkedList()
        linked_list.append("Action 1")
        linked_list.append("Action 2")
        linked_list.append("Action 3")
        linked_list.append("Action 4")
        linked_list.append("Action 5")
        self.assertEqual(
            linked_list.get_list(),
            ["Action 1", "Action 2", "Action 3", "Action 4", "Action 5"],
        )

    def test_search(self):
        linked_list = LinkedList()
        linked_list.append("Action 1")
        linked_list.append("Action 2")
        linked_list.append("Action 3")
        linked_list.append("Action 4")
        linked_list.append("Action 5")
        search_item = linked_list.search("Action 3")
        if search_item:
            self.assertEqual(search_item.data, "Action 3")
        else:
            self.fail("Search item not found")

    def test_search_none(self):
        linked_list = LinkedList()
        linked_list.append("Action 1")
        linked_list.append("Action 2")
        linked_list.append("Action 3")
        linked_list.append("Action 4")
        linked_list.append("Action 5")
        self.assertIsNone(linked_list.search("Action 6"))
