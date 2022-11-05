# Topic 4 DQ 3
## Explain who the intended victim of a cross-site scripting attack is and how it is different than a SQL injection attack.

Cross-site scripting attacks, or XSS attacks, inject malicious code into otherwise safe websites. A flaw in a web application is used to send malicious code to the end user, typically in JavaScript. As opposed to SQL injection attacks, XSS attacks target users instead of applications. XSS attacks can be launched against web applications if they display content from users or untrusted sources without proper escaping or validation.

According to OWASP, XSS vulnerabilities are one of the top security concerns of today!


Sources:

https://www.veracode.com/security/xss