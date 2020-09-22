const nodemailer = require('nodemailer');
const express = require('express'),
    path = require('path'),
    bodyParser = require('body-parser');

let app = express();
app.use(express.static('contact.html'));
app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

app.post('/send-email', function (req, res) {
    console.log('Hello we are sending the email');
    let transporter = nodemailer.createTransport({
        host: "ssl0.ovh.net",
        port: 465,
        secure: true, // upgrade later with STARTTLS
        auth: {
            user: "send@w4b.fr",
            pass: "Send@44350"
        },
        tls: {
            // do not fail on invalid certs
            rejectUnauthorized: false
        }
    });

    const mailOptions = {
        from: 'send@w4b.fr',
        to: 'gurvan.seveno@gmail.com',
        subject: 'Sending Email using Node.js',
        text: 'That was easy!'
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return console.log(error);
        }
        console.log('Message %s sent: %s', info.messageId, info.response);
    });
    res.writeHead(301, { Location: 'contact.php' });
    res.end();
});

let server = app.listen(8080, function(){
    let port = server.address().port;
    console.log("Server started at http://localhost:%s", port);
});
