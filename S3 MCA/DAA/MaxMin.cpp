#include<iostream>

using namespace std;

int minn,maxx;
int min1,max1;
void MaxMin(int array[],int low,int high,int min,int max)
{
	int mid;
	if(low==high)
	{
		minn=maxx=array[low];
		return;
	}
	else if(low=(high-1))
	{
		if(array[low]<array[high])
		{
			minn=array[low];
			maxx=array[high];
			return;
		}
		else
		{
			minn=array[high];
			maxx=array[low];
			return;
		}
	}
	else
	{
		mid=(low+high)/2;
		MaxMin(array,low,mid,minn,maxx);
		MaxMin(array,mid+1,high,min1,max1);
		
		if(min1<minn)
		{
			minn=min1;
		}
		if(max1>maxx)
		{
			maxx=max1;
		}
	}
}

int main()
{
	
	int array[10]={67,12,13,49,90,107,23,22,10,57};
	
	MaxMin(array,0,9,minn,maxx);
	

	cout<<"\nMinumum = "<<minn<<"\nMaximum = "<<maxx<<"   "<<min1<<"   "<<max1;
	return 0;
}
