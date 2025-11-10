import random

# Get user inputs
num_trials = int(input("Enter number of trials: "))
rolls_per_trial = int(input("For each trial, how many rolls: "))
roll_up_value = int(input("Enter roll-up value (1–6): "))

poss_outcomes = 0

# Simulation
for i in range(num_trials):
    for j in range(rolls_per_trial):
        result = random.randint(1, 6)
        print(result, end=' ')
        if result == roll_up_value:
            poss_outcomes += 1
    print("\n--------")

# Calculate total outcomes
total_outcomes = num_trials * rolls_per_trial

# Display results
print(f"\nNumber of times {roll_up_value} appeared in {num_trials} trials of {rolls_per_trial} rolls each: {poss_outcomes}")
print("Probability =", poss_outcomes / total_outcomes)

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#Output

Enter number of trials: 2
For each trial, how many rolls: 5
Enter roll-up value (1–6): 6
3 1 6 2 5 
--------
4 6 2 6 3 
--------
Number of times 6 appeared in 2 trials of 5 rolls each: 3
Probability = 0.3
