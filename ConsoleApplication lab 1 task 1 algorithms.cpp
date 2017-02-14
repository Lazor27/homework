// ConsoleApplication13.cpp: определяет точку входа для консольного при

#include "stdafx.h"

#include <conio.h>
#include <iostream>
#include <cmath>
#include <math.h>

using namespace std;

int main()
{

	int x, y;
	cout << "Enter X value:" << endl;
	cin >> x;

	y = (3.1 * tan(x)) + (((2.3*x - 4)*log(abs(x))) / ((2 * x - 5.6)*(x + 7)));
	cout << "Result: " << y;


	system("pause");
}


