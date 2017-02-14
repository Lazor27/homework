// ConsoleApplication21.cpp: определяет точку входа для консольного приложения.
//

#include "stdafx.h"
#include <iostream>
#include "math.h"
#include "stdafx.h"

using namespace std;

int main()
{
	int digit;
	cout << "Vvedite chislo:\n";
	cin >> digit;

	digit /= 10;

	if (digit>0) {
		digit /= 10;
		if (digit>0) {
			cout << " V dannom chisle 3 cifri\n\n";
		}
		else {
			cout << " V dannom chisle 2 cifri\n\n";
		}
	}
	else {
		cout << " V dannom chisle 1 cifra\n\n";
	}

	

	system("pause");
}


