#include <iostream>
#include <cmath>
#include "math.h"

using namespace std;

int main()
{

   int x;
   cout << "Enter X value:" << endl; 
   cin >> x;
   
   int ax ,ay, bx, by, cx, cy;
   
   ax = ay = 0;
   
   bx = x;
   by = x-1;
   
   cx = -x;
   cy = x + 1;
  
   int a, b, c;
   
   a = abs( sqrt( pow(ax, 2) + pow(ay, 2) ) );
    b = abs( sqrt( pow(bx, 2) + pow(by, 2) ) );
    c = abs( sqrt( pow(cx, 2) + pow(cy, 2) ) );
   
   // медиана
   float ma;
   ma = sqrt( 2*pow(b, 2) + 2*pow(c,2) - pow(a, 2) )/2;
   
   float p, h;
   p = (a + b + c)/2;
  p =  p*(p-a)*(p-b)*(p-c);
  p = sqrt(p);
   h = ( 2*p )/a;
   
   cout << "Mediana: " << ma<< "\n";
   cout << "H: " << h << "\n";
   
   return 0;
}

