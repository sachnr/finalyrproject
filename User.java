package coreC;

import java.sql.Date;



public class User {
	public User()
	{
		usrId=0;
		usrType=0;
		usrLoginId="";
		usrLoginPwd="";
	}	
	public  User(int usrId,int usrType,String usrLoginId, String usrLoginPwd)
	{
		this.usrId=usrId;
		this.usrType=usrType;
		this.usrLoginId=usrLoginId;
		this.usrLoginPwd=usrLoginPwd;

	}
	public void setUsrId(int usrId)
	{
		this.usrId=usrId;
	}		
	public void setUsrType(int usrType)
	{
		this.usrType=usrType;
	}		
	
	public void setUsrLoginId(String usrLoginId)
	{
		this.usrLoginId=usrLoginId;
	}		
	public void setUsrLoginPwd(String usrLoginPwd)
	{
		this.usrLoginPwd=usrLoginPwd;
	}		
	public void setUsrCreationTime(Date usrCreationTime)
	{
		this.usrCreationTime=usrCreationTime;
	}		
	public int getUsrId()
	{
		return usrId;
	}	
		
	public int getUsrType()
	{
		return usrType;
	}	
	public String getUsrLoginId()	
	{
		return usrLoginId;
	}
	public String getUsrLoginPwd()	
	{
		return usrLoginPwd;
	}
	public Date getUsrCreationTime()	
	{
		return usrCreationTime;
	}
	private int usrId;
	private int usrType;
	private String usrLoginId;
	private String usrLoginPwd;
	private Date usrCreationTime;
}

