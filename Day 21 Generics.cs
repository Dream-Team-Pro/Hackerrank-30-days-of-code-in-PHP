using System;

class Printer
{

	/**
	*    Name: PrintArray
	*    Print each element of the generic array on a new line. Do not return anything.
	*    @param A generic array
	**/
    // Write your code here
    static void PrintArray<T>(Array genericArray) 
    {
        foreach(var item in genericArray)
        {
            Console.WriteLine(item);
        }    
    }
