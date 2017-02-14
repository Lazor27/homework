// ConsoleApplication19.cpp: определяет точку входа для консольного приложения.
//

#include "stdafx.h"
#include <iostream>
#include <math.h>
#include <stdlib.h>


using namespace std;

	void main()
	{
		int digit, i = 0;
		cout << "enter digit"<< endl;
		cin >> digit;
		for (digit; digit>0; i++) 
			digit /= 10;
		
		cout << " number of digits= " << i;
		
    system("pause");
}

