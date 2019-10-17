package coreC;
public class AdminData
{
	public AdminData()
	{
		courseId=0;
		courseName="";
		courseFee=0.0f;
		courseDuration=0.0f;
		courseDetail="";
	}
	public AdminData(int courseId,String courseName,float courseFee,float courseDuration,String courseDetail)
	{
		this.courseId=courseId;
		this.courseName=courseName;
	    this.courseFee=courseFee;
	    this.courseDuration=courseDuration;
	    this.courseDetail=courseDetail;
	}
	public void setCourseId(int courseId)
	{
		this.courseId=courseId;
	}
	public void setCourseName(String courseName)
	{
		this.courseName=courseName;
	}
	public void setCourseFee(float courseFee)
	{
		this.courseFee=courseFee;
	}
	public void setCourseDuration(float courseDuration)
	{
		this.courseDuration=courseDuration;
	}
	public void setCourseDetail(String courseDetail)
	{
		this.courseDetail=courseDetail;
	}
	public int getCourseId()
	{
		return courseId;
	}
	public String getCourseName()
	{
		return courseName;
	}
	public float getCourseFee()
	{
		return courseFee;
	}
	public float getCourseDuration()
	{
		return courseDuration;
	}
	public String getCourseDetail()
	{
		return courseDetail;
	}
	
	private int courseId;
	private String courseName;
	private float courseFee;
	private float courseDuration;
	private String courseDetail;
	
}
