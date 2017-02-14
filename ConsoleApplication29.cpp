#include "stdafx.h"
#include <iostream>
#include <math.h>
#include <time.h>

using namespace std;

int main() {
	const float e = 0.01;
	int k = 1, c;
	char sequence;
	cout << "Please choose your sequence (1 or 2)" << endl;
	cin >> sequence;
	if (sequence == '1') {
		double a = 0, sum1 = 0; c = 0;
		do {
			a = (4.5 + (cos(2 * k) + 1.8 * (3 * k - 7)) / sqrt(abs(1.5 * k + 9))) / k;
			sum1 = sum1 + a;
			c++;
			k = k++;
			cout << a << endl;
		} while (fabs(a) > e);

		cout << "Amount of elements =" << c << ";ta =" << a << ";\tSumma =" << sum1 << ";" << endl;
	}
	else
		if (sequence == '2')
		{
			double b = 0, sumk = 0, c = 0, factk = 1;
			float x = 0.4;

			do {
				factk *= k;
				b = (4.5 + (cos(2 * k) + 1.8 * (3 * k - 7)) / sqrt(abs(1.5 * k + 9))) / factk;
				sumk = sumk + b;
				c++;
				k = k++;
				cout << b << endl;
			} while (fabs(b) > e);
			cout << "Amount of elements =" << c << ";\tx =" << x << ";\tSumma =" << sumk << ";" << endl;
		}
	system("pause");
	return 0;
}