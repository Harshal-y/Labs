import itertools
import string

alphabet = string.ascii_lowercase

with open("wordlist.txt", "w") as f:
    for length in range(1, 7):
        for word in itertools.permutations(alphabet, length):
            f.write("".join(word) + "\n")
