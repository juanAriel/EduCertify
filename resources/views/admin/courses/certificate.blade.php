<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Certificate of Completion</title>

    @include('admin.courses.certificate-styles')
</head>

<body>
    <div class="certificate-container">
        <div class="watermark">
            <img class="background-image" src="{{ $background_image }}" alt="Background Image">
        </div>

        <div class="certificate-header">
            <div class="logo">
                <img src="{{ $logo }}" alt="Institution Logo" class="institution-logo">
            </div>

            <div class="title">
                <p>{!! $title !!}</p>
            </div>
        </div>

        <div class="certificate-title">
            <p>CERTIFICATE OF COMPLETION</p>
        </div>

        <div class="acknowledges">
            <p>ACKNOWLEDGES THAT</p>
        </div>

        <div class="name">
            <p>{{ $participant_name }}</p>
        </div>

        <div class="certificate-body">
            <p class="description">HAS SUCCESSFULLY COMPLETED THE FOLLOWING COURSE:</p>
            <p class="course-title">{{ $course_name }}</p>
            <p>{{ $course_description }}</p>
        </div>

        <div class="certificate-pre-footer">
            <div class="duration">
                <p>{{ $hours }}</p>
                <p>EDUCATIONAL HOURS</p>
            </div>

            <div class="date">
                <p>ON THIS</p>
                <p>{{ $date }}</p>
            </div>
        </div>

        <div class="certificate-footer">
            <div class="signature">
                <img class="sign" src="{{ $speaker_signature }}" alt="Signature Instructor">
                <p class="line"></p>
                <p class="instructor-details">{{ $speaker_name }}</p>
                <p class="instructor-details">INSTRUCTOR NAME</p>
            </div>

            <div class="signature">
                <img class="sign" src="{{ $director_signature }}" alt="Signature Director">
                <p class="line"></p>
                <p class="director-details">{{ $director_name }}</p>
                <p class="director-details">DIRECTOR'S SIGNATURE</p>
            </div>
        </div>
    </div>
</body>

</html>
