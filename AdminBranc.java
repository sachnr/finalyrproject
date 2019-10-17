package coreC;

public class AdminBranc 
{
	public AdminBranc()
	{
		 branchId=0;
		 branchName="";	
	}
	public AdminBranc(int branchId,String branchName)
	{
		this.branchId=branchId;
		this.branchName=branchName;
	}
	public void setBranchId(int branchId)
	{
		this.branchId=branchId;
	}
	public void setBranchName(String branchName)
	{
		this.branchName=branchName;
	}
	public int getBranchId()
	{
		return branchId;
	}
	public String getBranchName()
	{
		return branchName;
	}
int branchId;
String branchName;

}
