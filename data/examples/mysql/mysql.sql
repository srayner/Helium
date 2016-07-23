-- Gallery table
CREATE TABLE gallery (
  `id`          Integer(11) NOT NULL AUTO_INCREMENT,
  `name`        VarChar(128),
  `visibility`  VarChar(32),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Photograph table
CREATE TABLE photograph (
  `id`          Integer(11) NOT NULL AUTO_INCREMENT,
  `title`       VarChar(128),
  `caption`     Text,
  `filename`    VarChar(256),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE gallery_photograph (
  `gallery_id` Integer(11) NOT NULL,
  `photograph_id` Integer(11) NOT NULL,
  PRIMARY KEY (gallery_id, photograph_id)
) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;