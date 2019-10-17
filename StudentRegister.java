package coreC;
import java.sql.Date;
public class StudentRegister 
{
	public StudentRegister()
	{
		stdId=0;
		stdName="";
		stdMob="";
		stdEmail="";
		stdAddress="";
		stdCourse="";
		stdBranch="";
		stdCollege="";
		stdFee=0.0;
		stdRef="";
		stdBch="";
		stdCcn=0.0;
		
	}
	public StudentRegister(int stdId,String stdName,String stdMob,String stdEmail,String stdAddress,String stdCourse,String stdBranch,String stdCollege,Date dob,double stdFee,String stdRef,String stdBch,Date startDate,Date stopDate,double stdCcn)
	{
		this.stdId=stdId;
		this.stdName=stdName;
		this.stdMob=stdMob;
		this.stdEmail=stdEmail;
		this.stdAddress=stdAddress;
		this.stdCourse=stdCourse;
		this.stdBranch=stdBranch;
		this.stdCollege=stdCollege;
		this.stdFee=stdFee;
		this.stdRef=stdRef;
		this.stdBch=stdBch;
		this.startDate=startDate;
		this.stopDate=stopDate;
		this.dob=dob;
		this.stdCcn=stdCcn;
	}

	
	
	public void setStdId(int stdId)
	{
		this.stdId=stdId;
	}
	public void setStdId(String stdName)
	{
		this.stdName=stdName;
	}
	public void setStdMob(String stdMob)
	{
		this.stdMob=stdMob;
	}
	public void setStdEmail(String stdEmail)
	{
		this.stdEmail=stdEmail;
	}
	public void setStdAddress(String stdAddress)
	{
		this.stdAddress=stdAddress;
	}
	public void setStdCourse(String stdCourse)
	{
		this.stdCourse=stdCourse;
	}
	public void setStdBranch(String stdBranch)
	{
		this.stdBranch=stdBranch;
	}
	public void setStdCollege(String stdCollege)
	{
		this.stdCollege=stdCollege;
	}
	public void setStdFee(double stdFee)
	{
		this.stdFee=stdFee;
	}
	public void setStdRef(String stdRef)
	{
		this.stdRef=stdRef;
	}
	public void setStdBch(String stdBch)
	{
		this.stdBch=stdBch;
	}
	public void setStdCcn(double stdCcn)
	{
		this.stdCcn=stdCcn;
	}
	public int getStdId()
	{
		return stdId;
	}
	public String getStdName()
	{
		return stdName;
	}
	public String getStdMob()
	{
		return stdMob;
	}
	public String getStdEmail()
	{
		return stdEmail;
	}
	public String getStdAddress()
	{
		return stdAddress;
	}
	public String getStdCourse()
	{
		return stdCourse;
	}
	public String getStdBranch()
	{
		return stdBranch;
	}
	public String getStdCollege()
	{
		return stdCollege;
	}
	public double getStdFee()
	{
		return stdFee;
	}
	public String getStdRef()
	{
		return stdRef;
	}
	public String getStdBch()
	{
		return stdBch;
	}
	public double getStdCcn()
	{
		return stdCcn;
	}
	public void setStartDate(Date startDate)
	{
		this.startDate=startDate;
	}
	public void setStopDate(Date stopDate)
	{
		this.stopDate=stopDate;
	}
	public Date getStartDate()
	{
		return startDate;
	}
	public Date getStopDate()
	{
		return stopDate;
	}
	public void setDob(Date dob)
	{
		this.dob=dob;
	}
	public Date getDob()
	{
		return dob;
	}
	private int stdId;
	private String stdName;
	private String stdMob;
	private String stdEmail;
	private String stdAddress;
	private String stdCourse;
	private String stdBranch;
	private String stdCollege;
	private double stdFee;
	private String stdRef;
	private String stdBch;
	private double stdCcn;
	private Date startDate;
	private Date stopDate;
	private Date dob;

}
