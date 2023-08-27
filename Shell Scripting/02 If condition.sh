echo "Enter you age?";
read Age;

if [ "$Age" -gt 12 ] && [ "$Age" -lt 21 ]; then
    echo "You are a Teen";
else
    echo "You are not a Teen";
fi