SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE CEFirstYear (
  CE111 decimal(11,0),
  CHEM111 decimal(11,0),
  ARTAPP decimal(11,0),
  ES102 decimal(11,0),
  MMW decimal(11,0),
  MATH111 decimal(11,0),
  TCW decimal(11,0),
  PATHFIT1 decimal(11,0),
  NSTP101 decimal(11,0),
  PURCOM decimal(11,0),
  ES103 decimal(11,0),
  ES106 decimal(11,0),
  MOM decimal(11,0),
  MATH121 decimal(11,0),
  PHYS120 decimal(11,0),
  RPH decimal(11,0),
  PATHFIT2 decimal(11,0),
  NSTP102 decimal(11,0),
  STUDENTID int(11) PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE CEFourthYear (
  STUDENTID int(11) PRIMARY KEY,
  ES302 decimal(10,0),
  CE422 decimal(10,0),
  CE423 decimal(10,0),
  CE424 decimal(10,0),
  CE425 decimal(10,0),
  CE426 decimal(10,0),
  CE427 decimal(10,0),
  CE330 decimal(10,0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE infostudent(
  FIRSTNAME varchar(100),
  LASTNAME varchar(100),
  MIDDLENAME varchar(100),
  GENDER varchar(100),
  EMAIL varchar(150),
  DEPARTMENT varchar(200),
  NUMBER bigint(255),
  YEARLEVEL varchar(100),
  STATUS varchar(100),
  STANDING varchar(100),
  STUDENTID int(11) PRIMARY KEY,
  GPA decimal(65,0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE CESecondYear (
  CE211 decimal(10,0),
  CE212 decimal(10,0),
  ES202 decimal(10,0),
  ES208 decimal(10,0),
  ES301 decimal(10,0),
  ES209 decimal(10,0),
  FIL101 decimal(10,0),
  PATHFIT3 decimal(10,0),
  CE222 decimal(10,0),
  STS decimal(10,0),
  ES203 decimal(10,0),
  FIL103 decimal(10,0),
  UTS decimal(10,0),
  PATHFIT4 decimal(10,0),
  CE312 decimal(10,0),
  CE324 decimal(10,0),
  RIZAL decimal(10,0),
  ES205 decimal(10,0),
  STUDENTID int(11) PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE CEThirdYear (
  STUDENTID int(11) PRIMARY KEY,
  ES303 decimal(10,0),
  CE311 decimal(10,0),
  CE313 decimal(10,0),
  CE314 decimal(10,0),
  CE316 decimal(10,0),
  CE322 decimal(10,0),
  CE325 decimal(10,0),
  CE323 decimal(10,0),
  CE326 decimal(10,0),
  Ethc decimal(10,0),
  CE411 decimal(10,0),
  CE413 decimal(10,0),
  CE415 decimal(10,0),
  CE416 decimal(10,0),
  CE417 decimal(10,0),
  SS100 decimal(10,0),
  CE315 decimal(10,0),
  CE412 decimal(10,0),
  GNS decimal(10,0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create First Year Courses table
CREATE TABLE ARCHIFirstYear (
    StudentID INT(11) PRIMARY KEY,
    Arch111 DECIMAL(11,0),
    Arch112 DECIMAL(11,0),
    Arch113 DECIMAL(11,0),
    Arch114 DECIMAL(11,0),
    Arch115 DECIMAL(11,0),
    MMW DECIMAL(11,0),
    TCW DECIMAL(11,0),
    ArtApp DECIMAL(11,0),
    PATHFit1 DECIMAL(11,0),
    NSTP101 DECIMAL(11,0),
    Arch122 DECIMAL(11,0),
    Arch123 DECIMAL(11,0),
    Arch124 DECIMAL(11,0),
    Arch125 DECIMAL(11,0),
    Arch126 DECIMAL(11,0),
    Arch121 DECIMAL(11,0),
    Math112 DECIMAL(11,0),
    Ethc DECIMAL(11,0),
    PATHFit2 DECIMAL(11,0),
    NSTP102 DECIMAL(11,0)
);

-- Create Second Year Courses table
CREATE TABLE ARCHISecondYear (
    StudentID INT(11) PRIMARY KEY,
    Arch213 DECIMAL(11,0),
    Arch215 DECIMAL(11,0),
    Arch216 DECIMAL(11,0),
    Arch212 DECIMAL(11,0),
    Math106 DECIMAL(11,0),
    CE211 DECIMAL(11,0),
    RPH DECIMAL(11,0),
    Fil102 DECIMAL(11,0),
    PATHFit3 DECIMAL(11,0),
    Arch224 DECIMAL(11,0),
    Arch227 DECIMAL(11,0),
    Arch223 DECIMAL(11,0),
    Arch400 DECIMAL(11,0),
    CADD311 DECIMAL(11,0),
    ES202 DECIMAL(11,0),
    PurCom DECIMAL(11,0),
    UTS DECIMAL(11,0),
    PATHFit4 DECIMAL(11,0)
);

-- Create Third Year Courses table
CREATE TABLE ARCHIThirdYear (
    StudentID INT(11) PRIMARY KEY,
    Arch315 DECIMAL(11,0),
    Arch314 DECIMAL(11,0),
    Arch221 DECIMAL(11,0),
    ES206 DECIMAL(11,0),
    Arch311 DECIMAL(11,0),
    Arch313 DECIMAL(11,0),
    CADD322 DECIMAL(11,0),
    Arch326 DECIMAL(11,0),
    Arch325 DECIMAL(11,0),
    Arch312 DECIMAL(11,0),
    Arch324 DECIMAL(11,0),
    Arch322 DECIMAL(11,0),
    Arch320 DECIMAL(11,0),
    CE322 DECIMAL(11,0)
);

-- Create Fourth Year Courses table
CREATE TABLE ARCHIFourthYear (
    StudentID INT(11) PRIMARY KEY,
    Arch417 DECIMAL(11,0),
    Arch415 DECIMAL(11,0),
    Arch413 DECIMAL(11,0),
    CE413 DECIMAL(11,0),
    Arch323 DECIMAL(11,0),
    Arch411 DECIMAL(11,0),
    TEM DECIMAL(11,0),
    Arch428 DECIMAL(11,0),
    Arch424 DECIMAL(11,0),
    CE424 DECIMAL(11,0),
    Arch421 DECIMAL(11,0),
    Tech101 DECIMAL(11,0),
    Arch422 DECIMAL(11,0),
    ArchCSE420 DECIMAL(11,0)
);

-- Create Fifth Year Courses table
CREATE TABLE ARCHIFifthYear (
    StudentID INT(11) PRIMARY KEY,
    Arch519 DECIMAL(11,0),
    Arch511 DECIMAL(11,0),
    Arch513 DECIMAL(11,0),
    STS DECIMAL(11,0),
    Rizal DECIMAL(11,0),
    GnS DECIMAL(11,0),
    Arch520 DECIMAL(11,0),
    Arch522 DECIMAL(11,0),
    FL01 DECIMAL(11,0),
    ArchSCE520 DECIMAL(11,0)
);

