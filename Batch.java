package coreC;

public class Batch {
	public Batch()
	{
		 batchId=0;
		 batchTime="";	
	}
	public Batch(int batchId,String batchTime)
	{
		this.batchId=batchId;
		this.batchTime=batchTime;
	}
	public void setBatchId(int batchId)
	{
		this.batchId=batchId;
	}
	public void setBatchTime(String batchTime)
	{
		this.batchTime=batchTime;
	}
	public int getBatchId()
	{
		return batchId;
	}
	public String getBatchTime()
	{
		return batchTime;
	}
int batchId;
String batchTime;

}
