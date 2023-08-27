#!/bin/bash

# Check if at least one argument is provided
if [ $# -ge 1 ]; then
    # Iterate through the arguments
    for arg in "$@"; do
        # Check if the argument matches "--a"
        if [ "$arg" = "--a" ]; then
            echo "Value of --a found!"
            # Get the next argument (the value after --a)
            shift
            value="$1"
            echo "Value: $value"
            exit 0
        fi
    done

    # If --a is not found, show an error message
    echo "Argument --a not found"
else
    echo "No arguments provided"
fi

# sh 03\ arguments.sh --a sd 