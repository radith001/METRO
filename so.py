def optimal_page_replacement(pages, memory_size):
    memory = []
    page_faults = 0

    for i in range(len(pages)):
        page = pages[i]

        if page not in memory:
            if len(memory) == memory_size:
                farthest_index = -1
                farthest_page = -1

                for m in memory:
                    try:
                        next_index = pages[i+1:].index(m) + i + 1
                    except ValueError:
                        next_index = float('inf')
                    
                    if next_index > farthest_index:
                        farthest_index = next_index
                        farthest_page = m

                memory.remove(farthest_page)
            memory.append(page)
            page_faults += 1

    return page_faults


def lru_page_replacement(pages, memory_size):
    memory = []
    page_faults = 0
    recent_usage = {}

    for i in range(len(pages)):
        page = pages[i]

        if page not in memory:
            if len(memory) == memory_size:
                lru_page = min(recent_usage, key=recent_usage.get)
                memory.remove(lru_page)
                del recent_usage[lru_page]

            memory.append(page)
            page_faults += 1
        recent_usage[page] = i

    return page_faults


def fifo_page_replacement(pages, memory_size):
    memory = []
    page_faults = 0

    for page in pages:
        if page not in memory:
            if len(memory) == memory_size:
                memory.pop(0)
            memory.append(page)
            page_faults += 1

    return page_faults


# Input Pages and Memory Size
pages = [7, 0, 1, 2, 0, 3, 0, 4, 2, 3]
memory_size = 3

# Output Page Faults for Each Algorithm
print("Optimal Page Replacement:", optimal_page_replacement(pages, memory_size), "page faults.")
print("Least Recently Used (LRU):", lru_page_replacement(pages, memory_size), "page faults.")
print("First In First Out (FIFO):", fifo_page_replacement(pages, memory_size), "page faults.")





