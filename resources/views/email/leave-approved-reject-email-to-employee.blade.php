<p>Hello {{ $full_name }},</p>
<p>Your leave request has been {{ $leaveStatus }}.</p>
<p>Leave Request Details:</p>
<p><span style="font-weight: bold;">Start Date:</span> {{ $startDate }}</p>
<p><span style="font-weight: bold;">End Date:</span> {{ $endDate }}</p>
<p><span style="font-weight: bold;">Duration:</span> {{ $countDays }}</p>
<p><span style="font-weight: bold;">Leave Reason:<span> {{ $messages }}</p>
<p><span style="font-weight: bold;">Approved/Rejected By:</span> {{ $actionBy }}</p>
  

<p>Thank you, 
<p>RCCB</p> 
<br/><br/>