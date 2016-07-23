-- Gallery table
CREATE TABLE gallery (
  `id`          Integer(11) NOT NULL AUTO_INCREMENT,
  `name`        VarChar(128),
  `visibility`  VarChar(32),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Photograph table
CREATE TABLE photograph (
  `id`                Integer(11) NOT NULL AUTO_INCREMENT,
  `gallery_id`        Integer(11) NOT NULL,
  `title`             VarChar(128),
  `caption`           Text,
  `filename`          VarChar(256),
  `original_filename` VarChar(256),
  `height`            Integer(11),
  `width`             Integer(11),
  `date_taken`        Date,
  `location`          VarChar(256),
  FOREIGN KEY (gallery_id) REFERENCES gallery(id) ON DELETE CASCADE,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;