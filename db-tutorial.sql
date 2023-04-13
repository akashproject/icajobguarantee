ALTER TABLE `courses`  ADD `course_video_title` TEXT NULL  AFTER `slug`,  ADD `course_video_link` TEXT NULL  AFTER `course_video_title`,  ADD `course_video_image` INT NULL  AFTER `course_video_link`;

