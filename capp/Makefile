# Compiler and flags
CC = gcc
CFLAGS = -Wall -g

# Target executable
TARGET = number_checker

# Source files
SRCS = main.c isEven.c isOdd.c

# Object files
OBJS = $(SRCS:.c=.o)

# Header files
HEADERS = isEven.h isOdd.h

# Default target
all: $(TARGET)

# Build the target executable
$(TARGET): $(OBJS)
	$(CC) $(CFLAGS) -o $@ $(OBJS)

# Compile .c files to .o files
%.o: %.c $(HEADERS)
	$(CC) $(CFLAGS) -c $< -o $@

# Clean up compiled files
clean:
	rm -f $(OBJS) $(TARGET)

# Phony targets
.PHONY: all clean