#include<iostream>

using namespace std;

//partition function
int Partition(int array[],int low,int high)
{
	int i,j,temp;
	int pivot=array[low];
	
	i=low;
	j=high;
	
	
	while(i<j)
	{
		while(array[i]<=pivot)	
			i++;
		while(array[j]>pivot)
			j--;
			
		
		if(i<j)
		{
			temp=array[i];
			array[i]=array[j];
			array[j]=temp;
		}
	}
	
	temp=array[low];
	array[low]=array[j];
	array[j]=temp;
	
	return j;
}


//quicksort function
void QuickSort(int array[],int low,int high)
{
	int partition_index;
	if(low<high)
	{
		partition_index=Partition(array,low,high);
		
		QuickSort(array,low,partition_index-1);
		QuickSort(array,partition_index+1,high);
	}
}



int main()
{
	//	cout<< ;
	//	cin>> ;
	int array[]={12,1,45,23,67,89,22,45,90,2};
	
	QuickSort(array,0,9);
	
	for(int i=0;i<9;i++)
	{
		cout<<array[i]<<endl;
	}
	return 0;
}
