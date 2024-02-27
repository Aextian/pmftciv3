import React, { useEffect, useState } from "react";
import { CiShop } from "react-icons/ci";
import { MdComputer } from "react-icons/md";
import { FaUsers } from "react-icons/fa";
import { CiCreditCard1 } from "react-icons/ci";
import { GrTools } from "react-icons/gr";
import { FaMoneyCheckAlt } from "react-icons/fa";
import { GiNotebook } from "react-icons/gi";
import { FaTasks } from "react-icons/fa";
import { FaSchoolLock } from "react-icons/fa6";
import Sidemenu from "./Sidemenu";

interface Props {
    isOpen: boolean;
}

const Sidebar: React.FC<Props> = ({ isOpen }) => {
    const [subMenus, setSubMenus] = useState<{ [key: string]: boolean }>({});

    const toggleSubMenu = (menuName: string, openMenu: boolean) => {
        setSubMenus(() => ({
            [menuName]: openMenu,
        }));
    };

    useEffect(() => {
        // Reset submenus when sidebar is closed
        if (isOpen) {
            setSubMenus({});
        }
    }, [isOpen]);

    return (
        <aside
            className={`bg-white borde border-gray-200 rounded-lg shadow-2xl h-screen w-[80px] fixed overflow-auto transition-all duration-300 ease-in-out  text-xs ${
                isOpen ? "left-[-200px]" : "left-[0]"
            }`}
        >
            <ul className="flex flex-col items-center justify-center text-[10px] ">
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center  hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href="#"
                        onClick={() => toggleSubMenu("services", true)}
                    >
                        <CiShop size={32} />
                        Dashboards
                    </a>
                </li>
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href="#"
                        onClick={() => toggleSubMenu("test1", true)}
                    >
                        <MdComputer size={32} />
                        Pages
                    </a>
                </li>
                <li className=" border-b-2 w-[100%] hover:bg-slate-400">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href="#"
                        onClick={() => toggleSubMenu("test2",true)}
                    >
                        <FaUsers size={32} />
                        Users
                    </a>
                </li>
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <CiCreditCard1 size={32} />
                        Online Payment
                    </a>
                </li>
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <GrTools size={32} />
                        Property Items
                    </a>
                </li>
                <li className=" border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <FaUsers size={32} />
                        Manage Users
                    </a>
                </li>
                <li className=" border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <FaMoneyCheckAlt size={32} />
                        Accounting
                    </a>
                </li>
                <li className=" border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <GiNotebook size={32} />
                        Manage Lesson
                    </a>
                </li>
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <FaTasks size={32} />
                        Task
                    </a>
                </li>{" "}
                <li className=" border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <FaSchoolLock size={32} />
                        School Settings
                    </a>
                </li>{" "}
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <CiShop size={32} />
                        Ui
                    </a>
                </li>{" "}
                <li className="border-b-2 w-[100%]">
                    <a
                        className="py-4 flex flex-col items-center hover:border-l-4  hover:border-cyan-600 hover:text-cyan-600"
                        href=""
                    >
                        <CiShop size={32} />
                        Ui
                    </a>
                </li>
            </ul>
            {/* Sub menu */}
            <Sidemenu subMenus={subMenus} />
        </aside>
    );
};

export default Sidebar;
