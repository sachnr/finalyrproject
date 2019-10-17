package coreC;

public class College 
{
	public College()
	{
		this.clgId=0;
		this.clgName="";
	}
	public College(int clgId,String clgName)
	{
		this.clgId=clgId;
		this.clgName=clgName;
	}
	public void setClgId(int clgId)
	{
		this.clgId=clgId;
	}
	public void setClgName(String clgName)
	{
		this.clgName=clgName;
	}
	public int getClgId()
	{
		return clgId;
	}
	public String getClgName()
	{
		return clgName;
	}
private int clgId;
private String clgName;
}
