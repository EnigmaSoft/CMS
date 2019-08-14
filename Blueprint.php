LEGEND
    [#] Section
    [!] Requirement
    [+] Page
    [-] Feature/Widget
    [*] Redirection if Success

[#] Home
    [-] Featured News (LIMIT 3)
    [-] Latest News (LIMIT 5)

[#] Register
    [!] Guest
    [-] Account Registration
        [-] Username
        [-] Password
        [-] Repeat Password
        [-] Email
        [-] Date of Birth
        [-] Gender Selection
        [*] Download

[#] Download
    [-] Game Files
    [-] Game Client
    [-] System Requirement

[#] Rankings
    [+] /Overall
        [-] Overall (Level-based)
    [+] /Job
        [-] Job (Class-based) (Beginner, Thief, Magician, Warrior, Bowman)
    [+] Fame
        [-] Hall of Fame (Fame-based)

[#] Vote
    [+] /
        [-] Gateway
    [+] Gtop100
        [-] Username (exist ? encrypt&send : error)
        [*] Gtop100 Site
    [+] (API) Pingback
        [!] (String)  (POST) VoterIP
        [!] (Boolean) (POST) Successful
        [!] (String)  (POST) Reason
        [!] (String)  (POST) pingUsername (decrypt, exist ? checkEligible&process : error)

[#] Donate
    [+] /
        [-] Gateway
    [+] PayPal
        [-] Username
        [-] Password
        [-] Choose Amount
        [*] Paypal

[#] News
    [+] /all
        [-] Category: All
    [+] /general
        [-] Category: General
    [+] /game-update
        [-] Category: Game Updates
    [+] /notice
        [-] Category: Notice
    [+] /event
        [-] Category: Event

[#] Article
    [+] /{slug}
        [-] View Article
    [+] /{slug}/edit
        [-] Edit Article

[#] Dashboard
    [!] Auth
    [-] Last Login
    [-] Last Vote
    [-] Game Cash
    [-] MaplePoints
    [-] Character Listing (Character IMG, Name, Job, Level, Exp)
    [+] Settings
        [-] Switch Main Character
        [-] Change Password
        [-] Reset PIN

[#] GM Dashboard
    [!] Auth, GameMaster
    [-] Welcome
    [-] News Index (Paginate)
    [+] (ID/Slug)/(Create, Read, Update, Delete)
