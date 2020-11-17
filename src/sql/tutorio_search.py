import psycopg2

def findClassesTakenSpecificUser():
    user = input()
#    """(
#select *
#from users
#where name = 'William Violet';

#select * from classes_taken;

def findTutorsForClass(className):
    query = """
        select
        tutor_for_class.class_name,
        users.name
        from
        (
            select
                class.crn, 
                class.class_name, 
                tutors_list.rin
            from
            (
                select 
                    crn, 
                    class_name
                from 
                    classes
                where 
                    class_name = '""" + className + """'
            ) as class
            join tutors_list on 
                tutors_list.crn = class.crn
        ) as tutor_for_class
        join users on 
            users.rin = tutor_for_class.rin
                """

    return query

def findUsers():
    query = """
        select * 
        from users
            """
    return query

def findClassesForUser(userName): 
    query = """
        select 
            name, 
            class_name
        from
        (
            select 
                user_name.rin, 
                user_name.name,
                classes_taken.crn
            from
            (
                select 
                    rin, 
                    name
                from 
                    users
                where 
                    name = '""" + userName + """'
            ) as user_name
            join classes_taken on 
                classes_taken.rin = user_name.rin
        ) as classes_by_name
        join classes on classes.crn = classes_by_name.crn
            """
    return query 

def run():
    try:
        # Will need to change with AWS implementation
        connection = psycopg2.connect(user = "will",
                                      password = "",
                                      host = "127.0.0.1",
                                      database = "tutorio")
        cursor = connection.cursor()
        user_input = input("Enter Command: ")

        if user_input.lower() == "find tutor":
            argument = input("What class do you want to find tutors for: ")
            cursor.execute(findTutorsForClass(argument))
            records = cursor.fetchall()
            print("Class Name: " + records[0][0])
            print("Tutors: " + records[0][1])
        
        if user_input.lower() == "find users": 
            cursor.execute(findUsers())
            records = cursor.fetchall()
            for row in records: 
                print("Name: " + row[1] + " RIN: " + str(row[0]))
        
        if user_input.lower() == "find classes": 
            argument = input("What user do you want to find classes for: ")
            cursor.execute(findClassesForUser(argument))
            records = cursor.fetchall()
            print(records[0][0] + ":")
            for row in records:
                print("\t" + row[1])

    except(Exception, psycopg2.Error) as error:
        print("Error while connecting to PostgreSQL", error)

    finally:
        # Closing database Connection
        if(connection):
            cursor.close()
            connection.close()
            print("PostgreSQL connection is closed")
    return 0

if __name__ == '__main__':
    run()
