# sd="$@"
# shift
# sds=$1
# echo "$sds";
# sh 04\ argument.sh --a sd --b sdsd

sd="$@"
shift
shift
sds=$2
echo "$sds";

# sh 04\ argument.sh --a sd --b sdsd