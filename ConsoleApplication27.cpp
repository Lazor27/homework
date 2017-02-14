// ConsoleApplication27.cpp: определяет точку входа для консольного приложения.
//

#include "stdafx.h"
#include <iostream>
#include <cmath>
#include <time.h>

using namespace std;

int main()
{
	setlocale(LC_ALL, "Russian");
	const float e = 0.001;
	int k = 1, c;
	char posledovatelnost;
	cout << "Выберите последовательность: 1 или 2" << endl;
	cin >> posledovatelnost;
	if (posledovatelnost == '1')
	{

		double a = 0, sum1 = 0; c = 0;
		do {
			a = ((3 * k - 1)*tan(5 * k) / ((k + 2)*(3 * k - 8)) + sqrt(abs(k - 3)))/k;
			sum1 += a;
			c++;
			k = k++;
			cout << a << endl;
		} while (fabs(a) > e);
		cout << "Кол-во елементов = " << c << ";\ta = " << a << ";\tСумма = " << sum1 << ";" << endl;

	} else;

	if (posledovatelnost == '2')
	{
		double b = 0, sumk = 0, c = 0, factk = 1;

		float x = 0.4;
		do {
			factk *= k;
			b = (pow(-1, k)*((3 * k - 1)*tan(5 * k) / ((k + 2)*(3 * k - 8)) + sqrt(abs(k - 3))))/factk;
			sumk += b;
			c++;
			k = k++;
			cout << b << endl;
		} while (fabs(b) > e);
		cout << "Кол-во елементов = " << c << ";\tx = " << x << ";\tСумма = " << sumk << ";" << endl;
	}
	system("pause");
	return 0;
}
