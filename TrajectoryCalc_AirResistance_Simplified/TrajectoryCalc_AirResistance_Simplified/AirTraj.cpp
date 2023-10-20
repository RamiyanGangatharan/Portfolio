/*
* Name: Ramiyan Gangatharan
* Date: 29/05/2023
* Description: This is a program that calculates projectile trajectory with air resistance.
*/

#include <iostream>
#include <cmath>
#include <iomanip> // for limiting decimal points

using namespace std;

int main()
{
	//Declarations

	// Constants
	double const GRAVITY = 9.81;
	double const AIR_DENSITY = 1.2;
	double const DRAG_COEFFICIENT = 0.47;
	double const MASS_KG = 1.0;
	double const PI = 3.14159;

	// Variables
	double time = 0;
	double DeltaTime = 0.01;
	double Position_X = 0;
	double Position_Y = 0;
	double LaunchAngleDegrees = 0;
	double AngleRadians = 0;
	double InitialVelocity = 0;
	double InitialVelocity_X = 0;
	double InitialVelocity_Y = 0;
	double Velocity_X = 0;
	double Velocity_Y = 0;
	double Force_X = 0;
	double Force_Y = 0;
	double Acceleration_X = 0;
	double Acceleration_Y = 0;

	int UserInput = 0;
	bool isRunning = true;


	while (isRunning)
	{
		Position_X = 0;
		Position_Y = 0;

		// User Input
		cout << endl << "Rami's Projectile Trajectory Calculator" << endl;
		cout << "---------------------------------------" << endl;
		cout << "This is calculated with simplified air \nresistance and physical calculations\n" << endl;

		cout << "[1] TRAJECTORY CALCULATOR" << endl;
		cout << "[2] EXIT" << endl;

		cout << "command: ";
		cin >> UserInput;


		if (UserInput == 1)
		{
			cout << "Initial Angle of Launch: ";
			cin >> LaunchAngleDegrees;

			double LaunchAngleRadians = (LaunchAngleDegrees * PI) / 180;

			cout << "Initial Velocity (m/s): ";
			cin >> InitialVelocity;

			// Initial Velocity Calculation
			InitialVelocity_X = InitialVelocity * cos(LaunchAngleRadians);
			InitialVelocity_Y = InitialVelocity * sin(LaunchAngleRadians);

			cout << "Initial Velocity @ [X]: ";
			cin >> Velocity_X;

			cout << "Initial Velocity @ [Y]: ";
			cin >> Velocity_Y;


			// Projectile Trajectory Calculation
			while (Position_Y >= 0)
			{
				// Net Force Calculation

				Force_X = -0.5 * AIR_DENSITY * DRAG_COEFFICIENT * Velocity_X * abs(Velocity_X);
				Force_Y = -0.5 * AIR_DENSITY * DRAG_COEFFICIENT * Velocity_Y * abs(Velocity_Y) - MASS_KG * GRAVITY;

				// Acceleration Calculation
				Acceleration_X = Force_X / MASS_KG;
				Acceleration_Y = Force_Y / MASS_KG;

				// Update Velocity & Position
				Velocity_X = Velocity_X + Acceleration_X * DeltaTime;
				Velocity_Y = Velocity_Y + Acceleration_Y * DeltaTime;
				Position_X = Position_X + Velocity_X * DeltaTime;
				Position_Y = Position_Y + Velocity_Y * DeltaTime;

				// Time Incrementation
				time = time + DeltaTime;

				//this line is to limit the amout of decimal points in the output
				std::cout << std::fixed << std::setprecision(4) << Position_X << ", " << Position_Y << endl;

			}
		}
		if (UserInput == 2)
		{
			return 0;
		}
	}
}