// ConsoleApplication24.cpp: определяет точку входа для консольного приложения.
//

#include "stdafx.h"
#include <iostream>
#include <conio.h>
using namespace std;

void main()
{
	
	float pek, litr, saka, krok;
	int kil, n;
	cout << "enter first value of peks \n";
	cin >> pek ;
	cout << "step of change of rows in the table\n";
	cin  >> krok;
	cout << "enter nomber of rows in table\n";
	cin >> kil;
	cout << "________________________" << "\n";
	cout << "Pek""|\t"<< "Litres""|\t"<< "Sakas ""|\t"   << "\n";
	cout << "________________________" << "\n";
	for (n = 1; n <= kil; n++) {
		litr = pek * 8.81;
		saka = pek*0.07929;
		cout << pek <<"  |\t"<< litr<<"|\t" << saka<< "|\t" << endl;
		cout << "________________________\n";
		pek += krok;
	}
	cout << "________________________" ;




	

	system("pause");
}

