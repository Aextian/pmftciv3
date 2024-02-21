import React from "react";
import { CiShop } from "react-icons/ci";
import { MdComputer } from "react-icons/md";

interface Props {
    isOpen: boolean;
}

const Sidebar: React.FC<Props> = ({ isOpen }) => {
    return (
        <aside
            className={`bg-white border border-gray-200 rounded-lg shadow  h-[100%] w-[80px] fixed overflow-auto transition-all duration-300 ease-in-out p-3 text-xs ${
                isOpen ? "left-[-200px]" : "left-[0]"
            }`}
        >
            <ul className="flex flex-col items-center justify-center">
                <li className="py-4 ">
                    <a className="flex flex-col items-center text-[13px] font-medium" href="">
                        <CiShop size={36} />
                        Dashboard
                    </a>
                </li>
                <li className="py-4 ">
                    <a className="flex flex-col items-center text-[13px] font-medium" href="">
                        <MdComputer size={36} />
                        Pages
                    </a>
                </li>
                <li className="py-4 ">
                    <a className="flex flex-col items-center text-[13px] font-medium" href="">
                        <CiShop size={36} />
                        Applications
                    </a>
                </li>
                <li className="py-4 ">
                    <a className="flex flex-col items-center text-[13px] font-medium" href="">
                        <CiShop size={36} />
                        Ui
                    </a>
                </li>
            </ul>
        </aside>
    );
};

export default Sidebar;
