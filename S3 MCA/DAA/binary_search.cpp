#include<iostream>

using namespace std;

int BinSearch(int array[],int low, int high,int item)
{
	int mid;
	
	if(low==high)
	{
		if(array[low]==item)
		 	return low;
		else
			return -1;
			
	}
	else
	{
		//find mid
		mid=(low+high)/2;
		
		if(array[mid]==item)
		{
			return mid;
		}
		else if(item<array[mid])
		{
			BinSearch(array,low,mid-1,item);
			
		}
		else
		{
			BinSearch(array,mid+1,high,item);
		}
	}
}

int main()
{
	//	cout<< ;
	//	cin>> ;
	
	int array[10]={23,24,25,26,27,28,29,30,31,32};
	int item;
	int low=0;
	int high=9;
	int position;
	
	cout<<"\nEnter item to be found: ";
	cin>>item;
	
	position=BinSearch(array,low,high,item);
	if(position==-1)
	{
		cout<<"\nItem not found ";
	}
	else
	{
		cout<<"\nItem found at poistion: "<<position;
	}
	
	return 0;
}
