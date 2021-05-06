#include<iostream>

using namespace std;

int b[10];
int array[]={34,23,56,12,78,90,23,45,0,2};
// Merging functon
void Merge(int array[],int low,int mid,int high)
{
	int i,j,k;
	 
	i=low;
	j=mid;
	k=low;
	
	while(i<mid && j<high)
	{
		if(array[i]<=array[j])
		{
			b[k]=array[i++];
		}
		else
		{
			b[k]=array[j++];
		}
		k++;
	}
	
		if(i>=mid)
		{
			while(j<high)
			{
				b[k]=array[j++];
				k++;
			}
			
		}
		else
		{
			while(i<mid)
			{
				b[k]=array[i++];
				k++;
			}
		}
	
	for(i=low;i<high;i++)
	{
		array[i]=b[i];
	}
}

void MergeSort(int array[],int low,int high)
{
	int mid;
	if(low<high)
	{
		mid=(low+high)/2;
		
		MergeSort(array,low,mid);
		MergeSort(array,mid+1,high);
		
		Merge(array,low,mid,high);
	}
}

int main()
{
	
	
	
	MergeSort(array,0,9);
	
	for(int i=0;i<9;i++)
	{
		cout<<array[i]<<endl;
	}
	
	
	return 0;
}
