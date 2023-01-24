-- Run the migrations
CREATE TABLE IF NOT EXISTS members
(
    LIKE people INCLUDING ALL,
    birth_date         date         NOT NULL,
    country            varchar(2)   NOT NULL,
    contact_language   varchar(2)   NOT NULL,
    pronouns           varchar(255) NULL,
    gender             varchar(255) NULL,
    address_id         bigint       NOT NULL,
    emergency_contacts json         NULL,
    reference_contacts json         NULL,
    CONSTRAINT "FK_ADDRESSES-MEMBERS-address_id" FOREIGN KEY (address_id) REFERENCES "public".addresses ("id"),
    CONSTRAINT "FK_COUNTRIES-MEMBERS-country" FOREIGN KEY (country) REFERENCES "public".countries ("id"),
    CONSTRAINT FK_languages_members_contact_language FOREIGN KEY (contact_language) REFERENCES "public".languages ("id")
) INHERITS (people);

CREATE INDEX "FK_ADDRESSES-MEMBERS-address_id" ON members(address_id);

CREATE INDEX "FK_COUNTRIES-MEMBERS-country" ON members(country);

CREATE INDEX FK_languages_members_contact_language_id ON members(contact_language);

CREATE INDEX FK_people_member_id ON members("id");

COMMENT ON COLUMN members.emergency_contacts IS '[{"name": "abc", "phone": "999", "relationship": "abc" }]';
COMMENT ON COLUMN members.reference_contacts IS '[{"name": "abc", "phone": "999", "email": "abc" }]';
