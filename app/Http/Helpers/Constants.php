<?php

namespace App\Http\Helpers;

class Constants
{
    const FRONT_INDEX = 'front.index';
    const FRONT_ARTICLE = 'front.article';
    const FRONT_CONTACT = 'front.contact';
    const FRONT_ABOUT = 'front.about';
    const FRONT_ADMISSION = 'front.admission';
    const FRONT_TREATMENT = 'front.treatment';

    const metaDescriptions = [
        self::FRONT_INDEX => 'Quest Behavioral Health is a mental health residential treatment program in Lancaster, CA,
        providing inpatient mental health care for depression, anxiety, trauma, schizophrenia, Bipolar
        Disorder, personality disorders, and substance use.

        Quest Behavioral Health is a socially rehabilitative, residential treatment facility located in sunny
        Lancaster, California. We serve adults with mental health and substance use concerns in need
        of a comprehensive treatment program to help them find healing and recovery.
        Our mission is to support our patients to learn and integrate recovery oriented skills, in a safe
        and supportive environment. We believe that wellbeing is obtained by treating the whole person:
        biological, psychological, social, and spiritual.
        Our goals are to facilitate education, interpersonal awareness and behavioral change through
        continuity of care in a community residential setting that sustains a life of healing, hope and
        trauma recovery.',
        self::FRONT_ABOUT => 'More information about Quest Behavioral Health, our foundation and values,
        and our leadership team. Quest Behavioral Health is a residential treatment facility in Lancaster,CA.',
        self::FRONT_TREATMENT => 'Making the decision to attend a residential treatment center for depression,
        trauma, personality disorders, or addictions is a big step. Learn more about what to expect in
        treatment.'
    ];

    const pageTitles = [
        self::FRONT_INDEX => 'Mental Health Residential Treatment Center for Adults in Lancaster, CA: QuestBehavioral Health',
        self::FRONT_ABOUT => 'About Quest Behavioral Health',
        self::FRONT_TREATMENT => 'What to Expect from Mental Health Residential Treatment in Southern California'
    ];


}
