# date_between

  A Shortcode plugin that accepts the attributes  “startDate”, “endDate”, and “message”. If the date is between two times, the message will display. When the date range is before or after this time, another message will be shown. Be sure to enter the startdate and enddate attributes as Y-m-d. Those attributes must use dashes - and the 0 before month or day, if any.

  Example - [date_between startdate="" enddate=""]content[/date_between]
  Example - [date_between startdate="2020-01-01" enddate="2020-12-31"]I will be displayed if the current date is between startdate and enddate[/date_between]
